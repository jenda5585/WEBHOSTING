<?php require('style.php'); ?>
<style>
header{
  height: 100vh;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-background-size: cover;
  background-size: cover;
  background-image: url('./img/background.jpg');
}

.nazev-serveru {
    color: white;
    text-shadow: 0px 0px 20px black;
    margin-top: 10rem;
    font-size: 3em;
    margin-left: 2em;
    margin-right: 0;
}

.popis-serveru {
    color: white;
    text-shadow: 0px 0px 20px black;
    margin-left: 4em;
    max-width: 30em;
    margin-right: 0;
}

.logo-serveru {
    position: absolute;
    color: white;
    text-shadow: 0px 0px 20px black;
    margin-top: 8rem;
    margin-left: 10em;
    width: 21em;
    animation: pulse 2.5s infinite ease-in-out alternate;
}  

  @keyframes pulse {
    from { transform: scale(0.8); }
    to { transform: scale(0.9); }
  }

@media (max-width: 1080px) {
    .nazev-serveru {
        margin-top: 2rem;
        margin-left: 1em;
    }

    .button-82-pushable {
       margin-top: 3em;
       display: block;
       position: relative;
       margin-left: auto;
       margin-right: auto;
       max-width: fit-content;
    }

    .popis-serveru {
        margin-left: 1em;
        margin-right: 1em;
    }

    .logo-serveru {
        display: none;
    }
}

@media (max-width: 420px) {

    .button-82-pushable {
        margin-left: auto;
        margin-right: auto;
     }
     .popis-serveru {
        margin-left: 1em;
        margin-right: 1em;
    }
    .nazev-serveru {
        margin-left: 1em;
    }
}

.button-82-pushable {
    margin-left: 7em;
    position: relative;
    border: none;
    background: transparent;
    padding: 0;
    cursor: pointer;
    outline-offset: 4px;
    transition: filter 250ms;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
  }
  
  .button-82-shadow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 12px;
    background: hsl(0deg 0% 0% / 0.25);
    will-change: transform;
    transform: translateY(2px);
    transition:
      transform
      600ms
      cubic-bezier(.3, .7, .4, 1);
  }
  
  .button-82-edge {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 12px;
    background: linear-gradient(
      to left,
      rgb(0, 45, 82) 0%,
      rgb(0, 117, 163) 8%,
      rgb(0, 103, 163) 92%,
      rgb(0, 60, 82) 100%
    );
  }
  
  .button-82-front {
    display: block;
    position: relative;
    padding: 12px 27px;
    border-radius: 12px;
    font-size: 1.1rem;
    color: white;
    background: rgb(0, 120, 240);
    will-change: transform;
    transform: translateY(-4px);
    transition:
      transform
      600ms
      cubic-bezier(.3, .7, .4, 1);
  }
  

  
  .button-82-pushable:hover {
    filter: brightness(110%);
    -webkit-filter: brightness(110%);
  }
  
  .button-82-pushable:hover .button-82-front {
    transform: translateY(-6px);
    transition:
      transform
      250ms
      cubic-bezier(.3, .7, .4, 1.5);
  }
  
  .button-82-pushable:active .button-82-front {
    transform: translateY(-2px);
    transition: transform 34ms;
  }
  
  .button-82-pushable:hover .button-82-shadow {
    transform: translateY(4px);
    transition:
      transform
      250ms
      cubic-bezier(.3, .7, .4, 1.5);
  }
  
  .button-82-pushable:active .button-82-shadow {
    transform: translateY(1px);
    transition: transform 34ms;
  }
  
  .button-82-pushable:focus:not(:focus-visible) {
    outline: none;
  }
</style>