sftp -o StrictHostKeyChecking=no -o BatchMode=no  $GIRA_USER@home66057901.1and1-data.host << !
  progress
  put index.html
  put mailer.php
  put -r pdf/
  put -r vendor/
  put -r js/
  put -r img/
  put -r css/
  put -r pt-br/
  put -r de/
  bye
!
