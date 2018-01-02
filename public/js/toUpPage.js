$('.page-scroll').on('click', function(e))
{
	var tujuan = $(this).attr('href');
	var elemenTujuan = $(tujuan);

	$('body').animated(
	{
		scrollTop: elemenTujuan.offset().top-50
	}, 1250, 'swing');

	e.preventDefault();
}