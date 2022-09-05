function alertita(id){

    Swal.fire(
        'CORRECTO',
        'Se ha registrado la empresa correctamente!',
        'success',

      )}

      function alertita2(id){

        
     
Swal.fire({
  title: 'Estas seguros??',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!',
  
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  
}})
}

