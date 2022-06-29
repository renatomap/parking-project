var search = document.getElementById('pesquisar')

function searchData() {
  window.location = 'sistema.php?search=' + search.value
}