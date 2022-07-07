var search = document.getElementById('pesquisar')

search.addEventListener('keydown', function(e) {
  if (e.key === 'Enter') {
    searchData()
  }
})

function searchData() {
window.location = 'sistema.php?search=' + search.value
}