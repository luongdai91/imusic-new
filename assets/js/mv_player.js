// const Plyr = require('./plyr');
// const PlyrResSelector = require('./plyr-resolution-selector');

const controls = `
      <div class="plyr__controls" id="im-video-progress">
        <div class="plyr__progress">
          <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" aria-label="Seek">
          <progress class="plyr__progress__buffer" min="0" max="100" value="0">% buffered</progress>
          <span role="tooltip" class="plyr__tooltip">00:00</span>
        </div>
      </div>
   
      <div class="plyr__controls" id="im-video-controls">
        <div class="video-controls__left">
          <button type="button" class="plyr__control" aria-label="Play, {title}" data-plyr="play">
            <svg class="icon--pressed" role="presentation">
              <use xlink:href="#plyr-pause"></use>
            </svg>
            <svg class="icon--not-pressed" role="presentation">
              <use xlink:href="#plyr-play"></use>
            </svg>
            <span class="label--pressed plyr__tooltip" role="tooltip">Pause</span>
            <span class="label--not-pressed plyr__tooltip" role="tooltip">Play</span>
          </button>
          <button type="button" class="plyr__control" data-plyr="fast-forward">
            <svg role="presentation">
              <use xlink:href="#plyr-fast-forward"></use>
            </svg>
            <span class="plyr__tooltip" role="tooltip">Forward {seektime} secs</span>
          </button>
          <button type="button" class="plyr__control" aria-label="Mute" data-plyr="mute">
            <svg class="icon--pressed" role="presentation">
              <use xlink:href="#plyr-muted"></use>
            </svg>
            <svg class="icon--not-pressed" role="presentation">
              <use xlink:href="#plyr-volume"></use>
            </svg>
            <span class="label--pressed plyr__tooltip" role="tooltip">Unmute</span>
            <span class="label--not-pressed plyr__tooltip" role="tooltip">Mute</span>
          </button>
          <div class="plyr__volume">
            <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off"
              aria-label="Volume">
          </div>
          <div style="margin-left: 8px">
            <span class="plyr__time plyr__time--current" aria-label="Current time">00:00</span>
          <span class="plyr__time plyr__time--duration" aria-label="Duration">00:00</span>
          </div>
        </div>
        
        <div class="video-controls__right d-flex justify-content-end align-items-center">
          <div class="autoplay d-none d-md-flex plyr__autoplay" style="margin-right: 8px">
            <span style="color: #ffffff">Autoplay</span>
            <input type="checkbox" id="switch" checked/>
            <label for="switch">Toggle</label>
          </div>
        

          <button type="button" class="plyr__control" data-plyr="fullscreen">
            <svg class="icon--pressed" role="presentation">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compress" class="svg-inline--fa fa-compress fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M436 192H312c-13.3 0-24-10.7-24-24V44c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v84h84c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-276-24V44c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v84H12c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24zm0 300V344c0-13.3-10.7-24-24-24H12c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-84h84c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12H312c-13.3 0-24 10.7-24 24v124c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12z"></path></svg>
            </svg> 
            <svg class="icon--not-pressed" role="presentation">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="expand" class="svg-inline--fa fa-expand fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M0 180V56c0-13.3 10.7-24 24-24h124c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H64v84c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12zM288 44v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12V56c0-13.3-10.7-24-24-24H300c-6.6 0-12 5.4-12 12zm148 276h-40c-6.6 0-12 5.4-12 12v84h-84c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24V332c0-6.6-5.4-12-12-12zM160 468v-40c0-6.6-5.4-12-12-12H64v-84c0-6.6-5.4-12-12-12H12c-6.6 0-12 5.4-12 12v124c0 13.3 10.7 24 24 24h124c6.6 0 12-5.4 12-12z"></path></svg>
            </svg>
            <span class="label--pressed plyr__tooltip" role="tooltip">Exit fullscreen</span>
            <span class="label--not-pressed plyr__tooltip" role="tooltip">Enter fullscreen</span>
          </button>
        </div>
        </div>
      </div>
`;

// Setup the player
// const player = new Plyr(document.getElementById('player'), {
//  controls,
//  });

// add resolution switch controller

var players = new Plyr(document.getElementById('player'), {
  controls,
});

PlyrResSelector.use(players);
