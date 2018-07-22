// munculPopup("#suksesApply", pengaya("#suksesApply", "top: 160px"))

tekan("Escape", () => {
	hilangPopup("#popupApply")
	hilangPopup("#suksesApply")
})
klik("#apply", () => {
	munculPopup("#popupApply", pengaya("#popupApply", "top: 100px"))
})
klik("#xApply", () => {
	hilangPopup("#popupApply")
})
klik("#xSukses", () => {
	hilangPopup("#suksesApply")
})

submit("#formApply", () => {
	let idlowongan = pilih("#idlowongan").value
	let idsiswa = pilih("#idsiswa").value
	let note = pilih("#note").value
	let apply = "idlowongan="+idlowongan+"&idsiswa="+idsiswa+"&note="+note
	pos("../aksi/aplikasi/apply.php", apply, () => {
		hilangPopup("#popupApply")
		munculPopup("#suksesApply", pengaya("#suksesApply", "top: 160px"))
		tulis("#applying .wrap", "Kamu sudah melamar lowongan ini")
	})
	return false
})

klik("#profil", () => {
	let aksi = pilih("#profil").getAttribute("aksi")
	if(aksi == "bkMenu") {
		pengaya(".menu", "right: 0%")
		pilih("#profil").setAttribute("aksi", "xMenu")
	}else {
		pengaya(".menu", "right: -50%")
		pilih("#profil").setAttribute("aksi", "bkMenu")
	}
})