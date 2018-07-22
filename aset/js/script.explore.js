function loadLowongan() {
	ambil("aksi/load/lowongan.php", function(res) {
		tulis("#load", res)
	})
}

loadLowongan()

function search(val) {
	let set = "namakuki=q&value="+val+"&durasi=4030"
	pos("aksi/setCookie.php", set, function() {
		loadLowongan()
	})
}

function setCategory(val) {
	let set = "namakuki=cat&value="+val+"&durasi=4030"
	pos("aksi/setCookie.php", set, function() {
		loadLowongan()
	})
}

function urutkan(val) {
	let set = "namakuki=urut&value="+val+"&durasi=4030"
	pos("aksi/setCookie.php", set, function() {
		loadLowongan()
	})
}

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