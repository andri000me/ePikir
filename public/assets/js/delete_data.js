function hapusData(data) {
	var id = $(data).data().id;
	var link = $(data).data().link;
	// console.log(id);
	swal({
		title: "Hapus Data",
		text: "Apakah data ingin dihapus?",
		icon: "warning",
		showCancelButton: true,
		buttons: {
			cancel: {
				text: "Batal",
				value: null,
				visible: true,
				className: "btn-warning",
				closeModal: true,
			},
			confirm: {
				text: "Ya, Hapus",
				value: true,
				visible: true,
				className: "btn-danger",
				closeModal: false,
			},
		},
	}).then((isConfirm) => {
		if (isConfirm) {
			$.post(
				link,
				{
					id_pemohon: id,
				},
				function (data) {
					if (data == "Success") {
						location.reload();
					} else {
						location.reload();
					}
				}
			);
			// swal("Deleted!", id, "success");
		}
	});
}
