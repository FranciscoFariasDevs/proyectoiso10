function alertitaR(id){
  if(id=1){
    Swal.fire(
        'CORRECTO',
        'Se ha registrado la empresa correctamente!',
        'success',
        '3000'
      )}


  if(id=2){      
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
}
}
