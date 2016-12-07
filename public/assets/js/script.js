$(function() {
  var $css = $("#css").percentageLoader({width: 256, height: 256, controllable : true, progress : 0.6, onProgressUpdate : function(val) {
    $css.setValue(Math.round(val * 100.0));
  }});
  $css.setValue('CSS');
  var $js = $("#js").percentageLoader({width: 256, height: 256, controllable : true, progress : 0.35, onProgressUpdate : function(val) {
    $js.setValue(Math.round(val * 100.0));
  }});
  $js.setValue('Javascript');

  // var topLoaderRunning = false;
  // $("#cssBtn").click(function() {
  //   if (topLoaderRunning) {
  //     return;
  //   }
  //   topLoaderRunning = true;
  //   $css.setProgress(20);
  //   //$css.setValue('CSS');
  //   var kb = 20;
  //   var totalKb = 70;
  //
  //   var animateFunc = function() {
  //     kb += 10;
  //     if (kb <= totalKb) {
  //       $css.setProgress(kb / totalKb);
  //
  //       // if (kb < totalKb) {
  //       //   setTimeout(animateFunc, 25);
  //       // } else {
  //       //   topLoaderRunning = false;
  //       // }
  //     }
  //   }
  //   $css.setValue('CSS');
  //   setTimeout(animateFunc, 25);
  //
  // });

});
