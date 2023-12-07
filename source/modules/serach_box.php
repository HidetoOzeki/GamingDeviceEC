<script type="text/javascript">

var recognizing = false;

if(!('webkitSpeechRecognition' in window)){
    console.log("SpeechRecognition is not supported on your browser!");
}else{
var recognition = new webkitSpeechRecognition();

var out = document.getElementById('output');

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
    console.log("音声入力結果出力"+text);
    document.getElementByName("product_name").innerText=data;
}

</script>
<div class="search_block">
    <form action="shouhinichiran.php" method="get" class="serch_form">
        <input type="text" name="product_name" class="search_box">
        <button type="submit" class="search_btn"><i class="fa fa-search fa-lg"></i></button>
        <button type="button" id="voice_search" onclick="startRecog()"><i class="fa solid fa-microphone"></i></input>
    </form>
</div>
<div class="indent"></div>