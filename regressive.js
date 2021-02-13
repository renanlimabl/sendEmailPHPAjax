let minutes = 15;
let seconds = 60;

let min = document.querySelector('#min')
let sec = document.querySelector('#sec')

const timer = setInterval(() => {
  seconds -= 1

  if (seconds == 0) {
    seconds = 59
    minutes -= 1
  }

  min.innerHTML = minutes
  sec.innerHTML = seconds

  if (minutes == 0) {
    clearInterval(timer)
  } 
}, 1000)

