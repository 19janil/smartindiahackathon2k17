
<script>
function speak() {
    
    var text1=document.getElementById("udid").value;
    
    var u = new SpeechSynthesisUtterance();
    u.text = text1;
    u.lang = 'en-US';
 
    u.onend = function () {
        if (callback) {
            callback();
        }
    };
 
    u.onerror = function (e) {
        if (callback) {
            callback(e);
        }
    };
 
    speechSynthesis.speak(u);
    //speak1();
}


</script>
