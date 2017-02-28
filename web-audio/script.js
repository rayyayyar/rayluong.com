var context;

try {
  // still needed for Safari
  window.AudioContext = window.AudioContext || window.webkitAudioContext;

  // create an AudioContext
  context = new AudioContext();
} catch(e) {
  // API not supported
  throw new Error('Web Audio API not supported.');
}

var source;

/**
 * Example 1: Load a sound
 * @param {String} src Url of the sound to be loaded.
 */

function loadSound() {
  source = context.createBufferSource();
  request = new XMLHttpRequest();
  request.open('GET', 'caribou.mp3', true);
  request.responseType = 'arraybuffer';

  request.onload = function() {
    // request.response is encoded... so decode it now
    context.decodeAudioData(request.response, function(buffer) {
    	source.buffer = buffer;
      // VERSUS source = buffer;
    }, function(err) {
      throw new Error(err);
    });
  }

  request.send();
}
loadSound();

function playSound() {
  
  
  source.connect(context.destination);
  source.start(0);
}
playSound();


// // define variables

// var audioCtx = new AudioContext();
// var source;


// // use XHR to load an audio track, and
// // decodeAudioData to decode it and stick it in a buffer.
// // Then we put the buffer into the source

// function getData() {
//   source = audioCtx.createBufferSource();
//   request = new XMLHttpRequest();

//   request.open('GET', 'caribou.mp3', true);

//   request.responseType = 'arraybuffer';


//   request.onload = function() {
//     var audioData = request.response;

//     audioCtx.decodeAudioData(audioData, function(buffer) {
//         // myBuffer = buffer;
//         source.buffer = buffer;
        
//         source.connect(audioCtx.destination);
        
//       },

//       function(e){"Error with decoding audio data" + e.err});

//   }

//   request.send();
// }

// function play() {
//   getData();
//   source.start(0);
  
// }

// play();