const typesizeTag = document.querySelector(`input[name=typesize]`)

const outputTag = document.querySelector("textarea.output")
const originalText = outputTag.value

outputTag.addEventListener("keyup", function () {
  sentenceTag.value = this.value
})

typesizeTag.addEventListener("input", function () {
  outputTag.style.fontSize = this.value + "vw"
  typesizeOutput.innerHTML = this.value + "vw"
})
