// $(function () {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var alamat = '/api/kategori'

//     // Get Data Siswa
//     $.ajax({
//         url: alamat,
//         method: "GET",
//         dataType: "json",
//         success: function (berhasil) {
//             // console.log(berhasil)
//             $.each(berhasil.data, function (key, value) {
//                 $(".data-kategori").append(
//                     `
//                     <tr>
//                         <td><center>${value.nama_kategori}</center></td>
//                         <td><center>${value.slug}</center></td>
//                         <td><center><button class="btn btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
//                     </tr>
//                     `
//                 )
//             })
//         }
//     })

//     // Simpan Data
//     $(".tombol-simpan").click(function (simpan) {
//         simpan.preventDefault();
//         var nama = $("input[name=namakategori]").val()
//         // console.log(nama)
//         $.ajax({
//             url: alamat,
//             method: "POST",
//             dataType: "json",
//             data: {
//                 nama_kategori : nama
//             },
//             success: function (berhasil) {
//                 alert(berhasil.message)
//                 location.reload();
//             },
//             error: function (gagal) {
//                 console.log(gagal)
//             }
//         })
//     })

//     // Hapus Data
//     $(".data-kategori").on('click', '.hapus-data', function () {
//         var id = $(this).data("id");
//         // alert(id)
//         $.ajax({
//             url: alamat + "/" + id,
//             method: "DELETE",
//             dataType: "json",
//             data: {
//                 id: id
//             },
//             success: function (berhasil) {
//                 alert(berhasil.message)
//                 location.reload();
//             },
//             error: function (gagal) {
//                 console.log(gagal)
//             }
//         })
//     })
// })
// var modal = document.getElementById('id01');
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }