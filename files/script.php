<script>
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

function copy(){
  const input = 'mc.tropicland.eu'
  navigator.clipboard.writeText(input)
  alert("IP zkopírovaná do schránky!");
}
</script>