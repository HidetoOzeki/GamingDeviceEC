
<div class="search_block">
    <form action="shouhinichiran.php" method="get" class="serch_form">
        <input type="text" name="product_name" class="search_box">
        <button type="submit" class="search_btn"><i class="fa fa-search fa-lg"></i></button>
        <button type="button" id="voice_search"><i class="fa solid fa-microphone"></i></button>
    </form>
</div>
<script>

var recognizing = false;

if(!('webkitSpeechRecognition' in window)){
    console.log("SpeechRecognition is not supported on your browser!");
}else{
var recognition = new webkitSpeechRecognition();

var button = document.getElementById('voice_search');

button.onclick = () => {
    recognition.start();
};

//recognition.continuous = true;

recognition.onstart = function(){
    recognizing = true;
    console.log('recognition started');
}
recognition.onend = function(){
    recognizing = false;
    console.log('recognition ended');
}


recognition.onresult = (event) => {
    var data = event.results[0][0].transcript;
    console.log("音声入力結果出力"+data);
    document.getElementByName("product_name").innerText=data;
}
}
</script>
<div class="indent"></div>