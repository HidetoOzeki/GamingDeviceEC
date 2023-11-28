document.addEventListener('DOMContentLoaded', () => {
 
    // 全てのレンジスライダーの要素を取得（必要に応じてセレクタを変更）
    const rangeSliders = document.querySelectorAll('input[type="range"]');
    // Track の元の色
    const baseColor = 'lightgray';
    rangeSliders.forEach((slider) => {
        // updateSlider を実行して現在の値を反映
        if(slider.id=="compare_pd") {
            // Track のつまみの左側の部分の色
            var activeColor = '#0874c7';
        }else {
            var activeColor = 'rgb(255, 0, 0)';
        }
          // 現在の値から割合（%）を取得
          const progress = (slider.value / slider.max) * 100;
          // linear-gradient で Track の色を設定
          slider.style.background = `linear-gradient(to right, ${activeColor} ${progress}%, ${baseColor} ${progress}%)`;
    });
});