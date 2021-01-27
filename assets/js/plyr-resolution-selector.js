(function (PlyrResSelector) {
  PlyrResSelector.use = function (_, after) {
    const container = document.querySelector('.plyr');
    // Create our select component
    // const qualitySelector = document.createElement('select');
    const qualitySelector = document.createElement('div');
    qualitySelector.dataset.plyr = 'quality';
    qualitySelector.setAttribute('class', 'plyr__resolution quality__menu');

    // Move to after desired dom element, defaults to after autoplay slider
    after = after || '.plyr__autoplay';
    var matchingTargets = container.querySelectorAll(after);
    var target = matchingTargets[matchingTargets.length - 1];
    target.parentNode.insertBefore(qualitySelector, target.nextSibling);

    // Attempt to add selectors as DOM could already be ready.
    setTimeout(function () {
      clearSelectorOptions(qualitySelector);
      addSelectorOptions(qualitySelector);
    }, 1);

    // Clear & re-add the <select>'s options once ready (on next tick)
    container.addEventListener('ready', function () {
      setTimeout(function () {
        clearSelectorOptions(qualitySelector);
        addSelectorOptions(qualitySelector);
      }, 1);
    });

    // Handle user picking different resolution
    // qualitySelector.addEventListener('change', function () {
    //   console.log('div has changed');
    //   // Map the selected option to its matching <source> element
    //   const selectedOption = this.children[this.selectedIndex];
    //   const selectedRes = selectedOption.dataset.size; // 1080 720 ..
    //   const player = document.getElementById('player');
    //   var matchingIndex = -1;
    //   let sourcesLength = player.children.length;

    //   for (let i = 0; i < sourcesLength; i++) {
    //     let srcRes = player.children[i].getAttribute('size');
    //     if (srcRes == selectedRes) {
    //       matchingIndex = i;
    //     }
    //   }

    //   // Re-orders the nodes so selected resolution is the first HTML5 source.
    //   player.insertBefore(player.children[matchingIndex], player.children[0]);
    //   const currentTime = player.currentTime;
    //   const isPaused = player.paused;
    //   player.load();

    //   // Once we load the new data, play/pause it back from the position it was before.
    //   const loadSeeker = player.addEventListener('loadeddata', function () {
    //     player.currentTime = currentTime;
    //     player.removeEventListener('loadeddata', loadSeeker);
    //     isPaused ? player.pause() : player.play();
    //   });
    // });
  };

  function addSelectorOptions(selector) {
    let sources = document.getElementById('player').children;
    // create default quality selected
    let defaultSelected = document.createElement('div');
    defaultSelected.setAttribute('class', 'selected-quality-item');
    defaultSelected.innerText = sources[0].getAttribute('size');
    defaultSelected.dataset.size = sources[0].getAttribute('size');
    defaultSelected.addEventListener('click', handleQualityControl);
    // create list for select
    let selectListItem = document.createElement('ul');
    selectListItem.setAttribute('class', 'quality-list-item');

    for (let i = sources.length - 1; i > -1; i--) {
      let res = sources[i].getAttribute('size');
      if (res != null) {
        // let option = document.createElement('option');
        // option.innerHTML = res;
        // option.dataset.size = res;
        // selector.appendChild(option);
        let option = document.createElement('li');
        option.innerHTML = res;
        option.dataset.size = res;
        option.setAttribute('class', 'quality-item');
        // add click event
        option.addEventListener('click', function () {
          handleSelectItem(res);
        });
        selectListItem.appendChild(option);
      }
    }
    selector.appendChild(defaultSelected);
    selector.appendChild(selectListItem);
  }

  function clearSelectorOptions(selector) {
    selector.innerHTML = '';
  }
})((window.PlyrResSelector = window.PlyrResSelector || {}));

// handle quality menu control
function handleQualityControl() {
  setTimeout(() => {
    const menu = document.querySelector('.quality-list-item');
    menu.classList.toggle('show');
    if (menu.classList.value.includes('show')) {
      document.addEventListener('click', function (e) {
        if (!document.querySelector('.quality-list-item').contains(e.target)) {
          // Clicked outside the box
          menu.classList.remove('show');
        }
      });
    }
  }, 100);
}

function handleSelectItem(selectedRes) {
  // re-render selectedRes to defaultRes
  const currentRes = document.querySelector('.selected-quality-item');
  currentRes.innerText = selectedRes;
  currentRes.dataset.size = selectedRes;

  // Map the selected option to its matching <source> element
  const player = document.getElementById('player');
  var matchingIndex = -1;
  let sourcesLength = player.children.length;

  for (let i = 0; i < sourcesLength; i++) {
    let srcRes = player.children[i].getAttribute('size');
    if (srcRes == selectedRes) {
      matchingIndex = i;
    }
  }

  // Re-orders the nodes so selected resolution is the first HTML5 source.
  player.insertBefore(player.children[matchingIndex], player.children[0]);
  const currentTime = player.currentTime;
  const isPaused = player.paused;
  player.load();

  // Once we load the new data, play/pause it back from the position it was before.
  const loadSeeker = player.addEventListener('loadeddata', function () {
    player.currentTime = currentTime;
    player.removeEventListener('loadeddata', loadSeeker);
    isPaused ? player.pause() : player.play();
  });

  // close the menu
  handleQualityControl();
}
