<?php use_stylesheet('error.css', 'last') ?>

<h1>Упс! Страница не найдена</h1>

<dl class="sfTMessageInfo">
  <dt>Вы перешли по ссылке с другой страницы этого сайта?</dt>
  <dd>Пожалуйста, помогите нам исправить эту ошибку. Отправте письмо по адресу <?php echo mail_to('support@onliner.by') ?></dd>

  <dt>Вы перешли по ссылке с другого сайта?</dt>
  <dd>Возможно ссылка уже устарела. Напишите нам письмо <?php echo mail_to('support@onliner.by') ?>. Укажите с какого сайта вы к нам пришли и мы постараемся связаться с этим сайтом для исправления этой ошибки.</dd>

  <dt>Что дальше?</dt>
  <dd>
    <ul class="sfTIconList">
      <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Вернуться на предыдущую страницу</a></li>
      <li class="sfTLinkMessage"><?php echo link_to('На главную', '@homepage') ?></li>
    </ul>
  </dd>
</dl>
