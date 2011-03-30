<?php

/**
 * Form for account apply, allows to create profile (sfGuardUserProfile) and account (sfGuardUser)
 * @author fizyk
 */
class sfApplyApplyForm extends sfGuardUserProfileForm
{    
    public function configure()
    {
        parent::configure();

        //Firstname and lastname
        $this->setWidget( 'firstname', new sfWidgetFormInputText( array(), array( 'maxlength' => 30 ) ) );
        $this->setWidget( 'lastname', new sfWidgetFormInputText( array(), array( 'maxlength' => 70 ) ) );

        //Setting username widget
        $this->setWidget( 'username',
                new sfWidgetFormInput( array(), array( 'maxlength' => 16 ) ) );

        //Setting password widgets
        $this->setWidget( 'password', 
                new sfWidgetFormInputPassword( array(), array('maxlength' => 128) ) );

        $this->setWidget('password2', 
                new sfWidgetFormInputPassword( array(), array('maxlength' => 128) ) );

        $this->setWidget( 'email', new sfWidgetFormInputText( array(), array('maxlength' => 255 ) ) );

        $this->widgetSchema->setLabels( array(
            'username' => 'Username',
            'password' => 'Password',
            'password2' => 'Confirm password',
            'email' => 'Email address',
            'firstname' => 'First Name',
            'lastname' => 'Last name'
        ) );
            
        //excludes other fields (except hidden) and sets their order
        $this->useFields(array('firstname', 'lastname', 'email', 'username', 'password', 'password2'));

        $this->widgetSchema->setNameFormat('sfApplyApply[%s]');
        $this->widgetSchema->setFormFormatterName('list');


        $this->setValidator( 'username', new sfValidatorApplyUsername() );

        $this->setValidator( 'password', new sfValidatorApplyPassword() );
        $this->setValidator( 'password2', new sfValidatorApplyPassword() );

        // Be aware that sfValidatorEmail doesn't guarantee a string that is preescaped for HTML purposes.
        // If you choose to echo the user's email address somewhere, make sure you escape entities.
        // <, > and & are rare but not forbidden due to the "quoted string in the local part" form of email address
        // (read the RFC if you don't believe me...).

        $this->setValidator('email', new sfValidatorAnd( array(
            new sfValidatorEmail( array('required' => true, 'trim' => true) ),
            new sfValidatorString( array('required' => true, 'max_length' => 255) ),
            new sfValidatorDoctrineUnique(
                    array('model' => 'sfGuardUser', 'column' => 'email_address'),
                    array('invalid' => 'An account with that email address already exists. If you have forgotten your password, click "cancel", then "Reset My Password."') )
        )));

        
        $this->setValidator('firstname', new sfValidatorApplyFirstname() );
        
        $this->setValidator('lastname', new sfValidatorApplyLastname() );

        $schema = $this->validatorSchema;

        // Hey Fabien, adding more postvalidators is kinda verbose!
        $postValidator = $schema->getPostValidator();

        $postValidators = array( 
            new sfValidatorSchemaCompare( 'password', sfValidatorSchemaCompare::EQUAL,
                    'password2', array(), array('invalid' => 'The passwords did not match.') ),
        );

        if( $postValidator )
        {
            $postValidators[] = $postValidator;
        }

        //Include captcha if enabled
        if ($this->isCaptchaEnabled() )
        {
            $this->addCaptcha();
        }

        $this->validatorSchema->setPostValidator( new sfValidatorAnd($postValidators) );
    }
  
    public function doSave($con = null)
    {
        $user = new sfGuardUser();
        $user->setUsername($this->getValue('username'));
        $user->setPassword($this->getValue('password'));
        $user->setEmailAddress( $this->getValue('email') );
        // They must confirm their account first
        $user->setIsActive(false);
        $user->save();
        $this->getObject()->setUserId($user->getId());

        return parent::doSave($con);
    }

}

