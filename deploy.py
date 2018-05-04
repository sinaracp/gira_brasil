#!/usr/bin/env python3

import pysftp
import os

user = os.environ['GIRA_USER']
password = os.environ['GIRA_PASSWORD']

with pysftp.Connection('home66057901.1and1-data.host', username=user, password=password) as sftp:
	with sftp.cd('.'):
		sftp.put('mailer.php')
		sftp.put('index.html')
		sftp.put_r('pdf', 'pdf',preserve_mtime=True)
		sftp.put_r('vendor', 'vendor', preserve_mtime=True)
		sftp.put_r('js', 'js', preserve_mtime=True)
		sftp.put_r('img', 'img', preserve_mtime=True)
		sftp.put_r('css', 'css', preserve_mtime=True)
		sftp.put_r('pt-br', 'pt-br', preserve_mtime=True)
		sftp.put_r('de', 'de', preserve_mtime=True)
