
<?php
$day= date("d");
switch($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: echo "��� ������� ����";
        break;
    case 6:
    case 7: echo "��� �������� ����";
        break;
    default : echo "����������� ����";
}