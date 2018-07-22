submit("#formCari", function() {
	let q = pilih("#q").value
	mengarahkan("./explore&q=" + q)
	return false
})