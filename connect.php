<?php
    $server="";//����
    $db_username="";//������ݿ��û���
    $db_password="";//������ݿ�����
    $db_database="";//Ĭ���������ݿ�
/*
  	$con = mysql_connect($server,$db_username,$db_password);//�������ݿ�
    if(!$con){
        die("can't connect".mysql_error());//�������ʧ���������
    }  
    mysql_select_db('test',$con);//ѡ�����ݿ⣨�ҵ���test��
*/
    $link = mysqli_connect( 
 $server, /* The host to connect to ����MySQL��ַ */  
 $db_username,   /* The user to connect as ����MySQL�û��� */  
 $db_password, /* The password to use ����MySQL���� */  
 $db_database);  /* The default database to query �������ݿ�����*/  
 
if (!$link) { 
  printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error()); 
  exit; 
}


?>