<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<html dir='ltr'>
   <head>
      <title>{TITLE} {SUBTITLE}</title>
      <link rel='stylesheet' href='{ROOT_URL}templates/default/style-1.7.css' type='text/css'/>
      <link rel='stylesheet' href='{ROOT_URL}templates/default/style-item-icons-1.0.css' type='text/css'/>
      <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
      <meta http-equiv='Content-Style-Type' content='text/css'>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script language='JavaScript' type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
      <script language='JavaScript' type='text/javascript' src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
   </head>
   <body class='CB_Body'>
      <div id='charbrowser'>
         <header>
            <span class='CB_imghelper'></span>
            <a href='{INDEX_URL}'><img src="{ROOT_URL}title.php"></a>
            <form method='GET' action='{INDEX_URL}'>
               <input type='hidden' name='page' value='search'>
               <label for='name'>{L_NAME}:</label><input id='name' type='text' name='name' autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="{SEARCH_NAME}">
               <label for='guild'>{L_GUILD}:</label><input id='guild' type='text' name='guild' autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="{SEARCH_GUILD}">
               <input type='submit' value='Go'>
            </form>
            <nav>
               <ul>
                  <li><a href='{INDEX_URL}?page=signaturebuilder'>{L_SIGBUILD}</a></li>
                  <li><a href='{INDEX_URL}?page=charmove'>{L_CHARMOVE}</a></li>
                  <li><a href='{INDEX_URL}?page=bazaar'>{L_BAZAAR}</a></li>
<!--                  <li><a href='{INDEX_URL}?page=barter'>{L_BARTER}</a></li> -->
                  <li><a href='{INDEX_URL}?page=adventure'>{L_LEADERBOARD}</a></li>
                  <li><a href='{INDEX_URL}?page=server'>{L_SERVER}</a></li>
                  <li><a href='{INDEX_URL}?page=settings'>{L_SETTINGS}</a></li>
                  <li><a href='http://mqemulator.net/forum2/viewforum.php?f=20'>{L_REPORT_ERRORS}</a></li>
                  <li><a href='{INDEX_URL}?page=help'>{L_HELP}</a></li>
               </ul>
            </nav>
         </header>
         <main>
            <div>
            {ADVERTISEMENT}
            </div>

  
