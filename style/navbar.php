<?php require('style.php'); ?>
<style>
  
.navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    margin: 0;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 20px 20px 20px 20px;
}

.navbar-logo{
  width: 72px;
  border-radius: 20px;
  margin-left: 2em;
  margin-top: 0.5em;
  margin-bottom: 0.5em
}

.navbar-links {
    height: 100%;
    opacity: 100%;
    margin-right: 2em;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
    color: white;
}

.navbar-links ul i {
    font-size: 1.05em;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a  {
    display: block;
    font-size: 1.05em;
    text-decoration: none;
    text-decoration-color: rgb(0, 117, 163);
    color: white;
    padding: 1.25em;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

.navbar-links li a:hover {
    color:rgb(161, 228, 255);
}

.navbar-links li p {
    display: block;
    text-decoration: none;
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    margin-top: 16px;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    margin: 0;
    height: 2.75px;
    width: 100%;
    background-color: white;
    align-items: center;
}

@media (max-width: 800px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .toggle-button {
        display: flex;
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
    }

    .navbar-links ul li {
        text-align: center;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
    }

    .navbar-links.active {
        display: flex;
    }
}
</style>