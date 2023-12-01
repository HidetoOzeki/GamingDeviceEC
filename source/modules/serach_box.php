<script type="text/javascript">

    const Recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognizer = new Recognition();

    recognizer.lang = 'ja-JP';

    var listening = false;

    function startRecog(){
        listening = !listening;

        if(!listening){
        recognizer.start();
        console.log("音声入力待機中");
        }else{
        recognizer.stop();
        console.log("音声入力停止");
        }
    }

    recognizer.onresult = (event) => {
        const text = event.result[0][0].transcript;
        console.log("音声入力結果出力"+text);
        document.getElementByName("product_name").innerText=text;
        listening = false;
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