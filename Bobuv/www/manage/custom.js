$(document).ready(function() {
						   
// ������� ��� ��������� ������� ������ ���� �� ������ � ������ popup				   
$('a.popup').click(function() {
									
									
// ���������� ��� �������� �������� rel ������� ������	
var popupid = $(this).attr('rel');


// ������ ���� �������� ���, ��� ����������� �������� rel
// �����������, ��� ������� rel ������� ������ - ��� popuprel. ����� ��� ���� �������� #popuprel
$('#' + popupid).fadeIn();


// ������� div fade ���� ���� body
// � �� ��� �������� ��� ����� �� ����  2 : CSS
$('body').append('<div id="fade"></div>');
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();


// ������ ���� ��������� ��������� ���� � ����� �����������, ����� ��� ��������
// �� ��������� 10px � ������ � ������
var popuptopmargin = ($('#' + popupid).height() + 10) / 2;
var popupleftmargin = ($('#' + popupid).width() + 10) / 2;


// ����� ���������� ������� .css ��� ������������ ���������� ���� �� ������
$('#' + popupid).css({
'margin-top' : -popuptopmargin,
'margin-left' : -popupleftmargin
});
});


// ���������� ��� ���� �������, ������� ������������ ��� ������������ ��������� ���� � ���������� ���� ��� ������� �� ���������� ����
$('#fade').click(function() {


// ��������� ids ���� ��������� ���� �����
$('#fade , #popuprel').fadeOut()
return false;
});
});