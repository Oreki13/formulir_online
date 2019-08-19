
const flashData = $('.flash-data').data('flashdata');
if(flashData){
	swal({
		title: flashData,
		text : '',
		icon :'success'
	});
};

$('.thapus').on('click', function (e) {

e.preventDefault();

	const href = $(this).attr('href');
		swal({
  title: "Are you sure?",
  text: "Data anda akan di hapus!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
	})
.then((willDelete) => {
  if (willDelete) {
  	document.location.href = href;

  }
});
});



