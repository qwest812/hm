<?php
$age=23;
if(($age<1) or (is_float($age))){
    echo "����������� �������";
}elseif(18<$age){
    echo "��� ��� ���� ��������";
}elseif($age<59){
    echo "��� ��� �������� � ��������";
}elseif($age>59){
    echo "��� ���� �� ������";
}