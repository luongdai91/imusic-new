<html>

<head>
  <title>iMusic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- custom css -->
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="./assets/css/pages/mv_player.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/page.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/blocks.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/print.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/reponsive.css">

  <link rel="stylesheet" href="./assets/css/components/autoplay/autoplay.css">
  <!-- bootstrap & jquery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- slickJS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- font aws -->
  <!-- <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
  <!-- carousel -->
  <link rel="stylesheet" type="text/css" href="./assets/css/slick.css">
  <script type="text/javascript" src="./assets/js/slick.js"></script>
  <script type="text/javascript" src="./assets/js/jquery.mousewheel.min.js"></script>
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Plyr -->
  <link rel="stylesheet" href="./assets/css/plyr.css" />
  <!-- <script src="./assets/js/plyr.polyfilled.min.js"></script> -->
  <script src="./assets/js/plyr.js"></script>
  <script src="./assets/js/plyr-resolution-selector.js"></script>
</head>

<body style="background: linear-gradient(to bottom,#0B0C27, #0C1033)">
  <!-- nav bar -->
  <div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#imusic_navbar"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
            class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
            </path>
          </svg>
        </span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="./assets/images/logo-nav.png" alt="logo">
      </a>
      <!-- Mobile search -->
      <div class="d-lg-none d-md-flex mobile-search">
        <div class="row im-search">
          <div class="d-flex align-items-center" style="padding: 5px 10px">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
              class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512">
              <path
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
              </path>
            </svg>
          </div>
          <input class="im-search-input" type="search" placeholder="Search song, album, playlist">
        </div>
      </div>

      <div class="collapse navbar-collapse" id="imusic_navbar">
        <ul class="d-flex justify-content-between navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link im-nav-item" href="#">BÀI HÁT<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">ALBUM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">CHỦ ĐỀ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">BẢNG XẾP HẠNG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">TOP 100</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">TIN TỨC</a>
          </li>
        </ul>
      </div>
      <div class="d-none d-lg-flex float-right">
        <div class="row im-search">
          <div class="d-flex align-items-center" style="padding: 5px 10px">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
              class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512">
              <path
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
              </path>
            </svg>
          </div>
          <input class="d-none d-xl-block im-search-input" type="search" placeholder="Search song, album, playlist">
        </div>
      </div>
    </nav>
  </div>
  <!-- nav bar -->
  <!-- <div class="col-12 d-flex justify-content-center rm-pd"> -->
  <div class="im-wrapper container" style="z-index: 2;">
    <div class="py-5"></div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-9">
        <div class="row px-3">
          <div class="col-12 pl-3">
            <video controls crossorigin playsinline id="player"
              poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
              <!-- Video files -->
              <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4"
                size="576">
              <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4"
                size="720">
              <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4"
                size="1080">
              <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4"
                size="1440">

              <!-- Caption files -->
              <track kind="captions" label="English" srclang="en"
                src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
              <track kind="captions" label="Français" srclang="fr"
                src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
            </video>
          </div>

          <div class="col-12">
            <div class="row mt-3 px-3 px-lg-0">
              <div class="col-12">
                <div class="player-breadcrumb">
                  <span>Nghe nhạc > Video Viet Nam > Gác lại âu lo</span>
                </div>
              </div>
            </div>
            <div class="row d-flex align-items-center mt-3 px-3 px-lg-0">
              <div class="col-12 col-lg-6">
                <div class="player-title">
                  <span>Gác Lại Âu Lo - Da LAB, Miu Lê</span>
                </div>
              </div>
              <div class="col-12 col-lg-6 m-stuff d-flex justify-content-lg-end justify-content-md-start">
                <a href="#" class="dl-n-sh-btn">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                    class="svg-inline--fa fa-download fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path
                      d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                    </path>
                  </svg>
                  <span class="d-none d-md-inline im-hide-m">TẢI
                    XUỐNG&nbsp;</span>
                  (200)</a>
                <a href="#" class="dl-n-sh-btn">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                    class="svg-inline--fa fa-share-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                      d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                    </path>
                  </svg>
                  <span class="d-none d-md-inline im-hide-m">CHIA
                    SẺ&nbsp;</span> (125)</a>
              </div>
            </div>
            <div class="row mt-3 pl-3 pl-lg-0">
              <div class="col-12">
                <div class="lyrics-wrapper">
                  <div class="row lyrics-header d-flex justify-content-between align-items-center">
                    <div class="song-info">
                      <p>Lời bài hát:
                        <span class="song-info__name">
                          gác lại âu lo
                        </span>
                      </p>
                      <p>Ca sĩ:
                        <span class="song-info__singer">Da LAB</span>
                        ,
                        <span class="song-info__singer">Miu Lê</span>
                      </p>
                    </div>
                    <div class="copy-lyrics d-flex justify-content-end align-items-center mt-3 mt-lg-0">
                      <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="copy"
                          class="svg-inline--fa fa-copy fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 448 512">
                          <path
                            d="M433.941 65.941l-51.882-51.882A48 48 0 0 0 348.118 0H176c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h224c26.51 0 48-21.49 48-48v-48h80c26.51 0 48-21.49 48-48V99.882a48 48 0 0 0-14.059-33.941zM266 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h74v224c0 26.51 21.49 48 48 48h96v42a6 6 0 0 1-6 6zm128-96H182a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h106v88c0 13.255 10.745 24 24 24h88v202a6 6 0 0 1-6 6zm6-256h-64V48h9.632c1.591 0 3.117.632 4.243 1.757l48.368 48.368a6 6 0 0 1 1.757 4.243V112z">
                          </path>
                        </svg>
                      </span>
                      <span class="d-none d-lg-inline">Sao chép</span>
                    </div>
                  </div>
                  <hr class="im">

                  <div class="row lyrics-body">
                    <div class="col-12 lyrics">
                      <p id="lyrics" class="truncate">
                        Look, I was gonna go easy on you and not to hurt your feelings But I’m only going to get this
                        one chance Something’s wrong, I can feel it (Six minutes, Slim Shady, you’re on) Just a feeling
                        I’ve got, like something’s about to happen, but I don’t know what If that means, what I think it
                        means, we’re in trouble, big trouble, And if he is as bananas as you say, I’m not taking any
                        chances You were just what the doctor ordered I’m beginning to feel like a Rap God, Rap God All
                        my people from the front to the back nod, back nod Now who thinks their arms are long enough to
                        slap box, slap box? They said I rap like a robot, so call me Rapbot But for me to rap like a
                        computer must be in my genes I got a laptop in my back pocket My pen’ll go off when I half-cock
                        it Got a fat knot from that rap profit Made a living and a killing off it Ever since Bill
                        Clinton was still in office With Monica Lewinsky feeling on his nut-sack I’m an MC still as
                        honest But as rude and indecent as all hell syllables, killaholic (Kill ‘em all with) This
                        slickety, gibbedy, hibbedy hip hop You don’t really wanna get into a pissing match with this
                        rappidy brat Packing a Mac in the back of the Ac, backpack rap crap, yep, yackidy-yac And at the
                        exact same time I attempt these lyrical acrobat stunts while I’m practicing That I’ll still be
                        able to break a motherfuckin’ table Over the back of a couple of faggots and crack it in half
                        Only realized it was ironic I was signed to Aftermath after the fact How could I not blow? All I
                        do is drop F-bombs, feel my wrath of attack Rappers are having a rough time period, here’s a
                        Maxipad It’s actually disastrously bad For the wack while I’m masterfully constructing this
                        masterpiece as I’m beginning to feel like a Rap God, Rap God All my people from the front to the
                        back nod, back nod Now who thinks their arms are long enough to slap box, slap box? Let me show
                        you maintaining this shit ain't that hard, that hard Everybody want the key and the secret to
                        rap immortality like I have got Well, to be truthful the blueprint's simply rage and youthful
                        exuberance Everybody loves to root for a nuisance Hit the earth like an asteroid, did nothing
                        but shoot for the moon since MC's get taken to school with this music 'Cause I use it as a
                        vehicle to bus the rhyme Now I lead a new school full of students Me? I'm a product of Rakim,
                        Lakim Shabazz, 2Pac N- -W.A, Cube, hey, Doc, Ren, Yella, Eazy, thank you, they got Slim Inspired
                        enough to one day grow up, blow up and be in a position To meet Run DMC and induct them into the
                        motherfuckin' Rock n' Roll Hall of Fame Even though I walk in the church and burst in a ball of
                        flames Only Hall of Fame I be inducted in is the alcohol of fame On the wall of shame You fags
                        think it's all a game 'til I walk a flock of flames Off of planking, tell me what in the fuck
                        are you thinking? Little gay looking boy So gay I can barely say it with a straight face looking
                        boy You witnessing a mass occur Like you watching a church gathering take place looking boy Oy
                        vey, that boy's gay, that's all they say looking boy You get a thumbs up, pat on the back And a
                        "way to go" from your label everyday looking boy Hey, looking boy, what you say looking boy? I
                        got a "hell yeah" from Dre looking boy I'mma work for everything I have Never ask nobody for
                        shit, get outta my face looking boy Basically boy you're never gonna be capable To keep up with
                        the same pace looking boy 'Cause I'm beginning to feel like a Rap God, Rap God All my people
                        from the front to the back nod, back nod The way I'm racing around the track, call me Nascar,
                        Nascar Dale Earnhardt of the trailer park, the White Trash God Kneel before General Zod this
                        planet's Krypton, no Asgard, Asgard So you be Thor and I'll be Odin, you rodent, I'm omnipotent
                        Let off then I'm reloading immediately with these bombs I'm totin' And I should not be woken I'm
                        the walking dead, but I'm just a talking head, a zombie floating But I got your mom deep
                        throating I'm out my Ramen noodle, we have nothing in common, poodle I'm a doberman, pinch
                        yourself in the arm and pay homage, pupil It's me, my honesty's brutal But it's honestly futile
                        if I don't utilize what I do though For good at least once in a while So I wanna make sure
                        somewhere in this chicken scratch I scribble and doodle Enough rhymes to maybe to try and help
                        get some people through tough times But I gotta keep a few punchlines just in case 'cause even
                        you unsigned Rappers are hungry looking at me like it's lunchtime I know there was a time where
                        once I Was king of the underground, but I still rap like I'm on my Pharoahe Monch grind So I
                        crunch rhymes, but sometimes when you combine Appeal with the skin color of mine You get too big
                        and here they come trying to Censor you like that one line I said on "I'm Back" from the Mathers
                        LP One when I tried to say "I'll take seven kids from Columbine Put 'em all in a line, add an
                        AK-47, a revolver and a nine" See if I get away with it now that I ain't as big as I was, but
                        I'm Morphin' into an immortal coming through the portal You're stuck in a time warp from 2004
                        though And I don't know what the fuck that you rhyme for You're pointless as Rapunzel with
                        fucking cornrows You write normal, fuck being normal And I just bought a new Raygun from the
                        future Just to come and shoot ya like when Fabolous made Ray J mad 'Cause Fab said he looked
                        like a fag at Maywhether's pad Singin' to a man while they played piano Man, oh man, that was a
                        24/7 special on the cable channel So Ray J went straight to the radio station the very next day
                        "Hey, Fab, I'mma kill you" Lyrics coming at you at supersonic speed, (JJ Fad) Uh, sama lamaa
                        duma lamaa you assuming I'm a human What I gotta do to get it through to you I'm superhuman
                        Innovative and I'm made of rubber So that anything you say is ricocheting off of me and it'll
                        glue to you I'm devastating, more than ever demonstrating How to give a motherfuckin' audience a
                        feeling like it's levitating Never fading, and I know that the haters are forever waiting For
                        the day that they can say I fell off, they'd be celebrating 'Cause I know the way to get 'em
                        motivated I make elevating music, you make elevator music Oh, he's too mainstream Well, that's
                        what they do when they get jealous, they confuse it It's not hip hop, it's pop, 'cause I found a
                        hella way to fuse it With rock, shock rap with Doc Throw on Lose Yourself and make 'em lose it I
                        don't know how to make songs like that I don't know what words to use Let me know when it occurs
                        to you While I'm ripping any one of these verses diverse as you It's curtains, I'm inadvertently
                        hurtin' you How many verses I gotta murder to Prove that if you were half as nice, your songs
                        you can sacrifice virgins too uh! School flunkie, pill junky But look at the accolades the
                        skills brung me Full of myself, but still hungry I bully myself 'cause I make me do what I put
                        my mind to And I'm a million leagues above you, ill when I speak in tongues But it's still
                        tongue in cheek, fuck you I'm drunk so Satan take the fucking wheel, I'm asleep in the front
                        seat Bumping Heavy D and the Boys, still chunky, but funky But in my head there's something I
                        can feel tugging and struggling Angels fight with devils and, here's what they want from me They
                        asking me to eliminate some of the women hate But if you take into consideration the bitter
                        hatred I have Then you may be a little patient and more sympathetic to the situation And
                        understand the discrimination But fuck it, life's handing you lemons, make lemonade then But if
                        I can't batter the women how the fuck am I supposed to bake them a cake then? Don't mistake it
                        for Satan It's a fatal mistake if you think I need to be overseas And take a vacation to trip a
                        broad And make her fall on her face and don't be a retard Be a king? Think not, why be a king
                        when you can be a God?
                      </p>
                    </div>
                  </div>
                  <div class="row d-flex justify-content-center align-items-center">
                    <div class="see-all-lyrics">
                      <a id="see-all-btn" href="#lyrics">
                        <span id="btn-text" class="btn-text">Xem toàn bộ</span>
                        <span id="btn-icon">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                            class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                              d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                            </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3 pl-3 pl-lg-0">
              <!-- MV hot -->
              <section style="height:fit-content;">
                <div class="col-12 d-flex justify-content-between align-items-center mb-3 mt-4">
                  <div class="im-breadcrumb">
                    MV liên quan </div>
                </div>
                <div class="d-inline d-lg-none col-md-12">
                  <div class="row px-3">
                    <div class="col-md-6">
                      <div class="mv-item-med">
                        <img class="thumb" src="./assets/images/im-video-1.png">
                        <div class="info">
                          <div style="position:absolute;width:100%">
                            <div class="name">
                              Hãy trao cho anh
                            </div>
                            <div class="d-flex justify-content-between">
                              <div class="artist">
                                Hãy trao cho anh
                              </div>
                              <div class="artist pr-3">
                                <div class="crs-item-ls-count">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                    class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                      d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                    </path>
                                  </svg>&nbsp;1M2
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="play-overlay animate__animated animate__fadeIn">
                          <div style="display:flex;align-items: center;">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                              class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                              </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                              class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path
                                d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                              </path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 im-hide-mb">
                      <div class="mv-item-med">
                        <img class="thumb" src="./assets/images/im-video-1.png">
                        <div class="info">
                          <div style="position:absolute;width:100%">
                            <div class="name">
                              Hãy trao cho anh
                            </div>
                            <div class="d-flex justify-content-between">
                              <div class="artist">
                                Hãy trao cho anh
                              </div>
                              <div class="artist pr-3">
                                <div class="crs-item-ls-count">
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                    class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                      d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                    </path>
                                  </svg>&nbsp;1M2
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="play-overlay animate__animated animate__fadeIn">
                          <div style="display:flex;align-items: center;">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                              class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                              </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                              class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path
                                d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                              </path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                      <div class="d-flex">
                        <div class="img-wrap" style="width:100%;">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                class="svg-inline--fa fa-headphones fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-saoanhchuavenha.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Sao anh chưa về nhà</div>
                        <div class="item-artist">Amee ft. Ricky Star</div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- MV hot -->
            </div>

            <div class="row mt-3 pl-3 pl-lg-0">
              <!-- Bai hat lien quan -->
              <section style="height: fit-content; width: 100%;">
                <div class="col-12 d-flex justify-content-between align-items-center mb-3 mt-4">
                  <div class="im-breadcrumb">
                    BÀI HÁT LIÊN QUAN</div>
                </div>
                <div class="py-2"></div>
                <div class="col-md-12">
                  <div class="row">
                    <!-- song 1 to 5 -->
                    <div class="col-12 col-md-6">
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">
                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                    </div>
                    <!-- end song 1 to 5 -->
                    <!-- song 6 to 10 -->
                    <div class="col-12 col-md-6">
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                      <div class="song-item-med px-0 px-md-1">
                        <div class="d-flex justify-content-between">
                          <div class="left row">

                            <div class="px-1">
                              <div class="row px-4">
                                <div class="img-wrapper">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="./assets/images/im-crs-1.png">

                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="pl-2">
                                    <div class="name truncate">Hãy trao cho anh
                                      (Official)</div>
                                    <div class="artist">Sơn Tùng M-TP</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="right d-flex align-items-center">
                            <div class="px-1">
                              <div class="listen-count right">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                                  class="svg-inline--fa fa-headphones fa-w-16 px-2" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                                  </path>
                                </svg>&nbsp;1M2</div>
                              <div class="right-control animate__animated animate__fadeIn">
                                <span>
                                  <a class="item px-2">
                                    03:30
                                  </a>
                                  <a class="item px-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                      class="svg-inline--fa fa-share-alt fa-w-14" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor"
                                        d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                      </path>
                                    </svg>
                                  </a>
                                  <a class="item pl-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                      class="svg-inline--fa fa-download fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                      </path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="im">
                      </div>
                    </div>
                    <!-- song 6 to 10  -->
                  </div>
                </div>
              </section>
              <!-- Bai hat lien quan -->
            </div>
          </div>
        </div>
      </div>

      <!-- Right side -->
      <div class="d-none d-lg-block col-lg-3" style="padding-right: 3rem">
        <!-- Nghe tiep -->
        <section style="height: fit-content;">
          <div class="row">
            <div class="col-12 rm-pd d-flex justify-content-between align-items-center">
              <div class="im-breadcrumb">
                NGHE TIẾP
              </div>
              <div class="autoplay">
                <span>Autoplay</span>
                <input type="checkbox" id="switch-nghetiep" checked />
                <label for="switch-nghetiep">Toggle</label>
              </div>
            </div>
          </div>
          <div class="py-3"></div>
          <div class="row">
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                          </div>
                          <img src="./assets/images/im-crs-1.png">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <div class="name truncate">Hãy trao cho anh (Official)
                            </div>
                            <div class="artist">Sơn Tùng M-TP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div>
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                          class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                          </path>
                        </svg>&nbsp;1M2</div>
                      <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                          </div>
                          <img src="./assets/images/im-crs-1.png">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <div class="name truncate">Hãy trao cho anh (Official)
                            </div>
                            <div class="artist">Sơn Tùng M-TP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div>
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                          class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                          </path>
                        </svg>&nbsp;1M2</div>
                      <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                          </div>
                          <img src="./assets/images/im-crs-1.png">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <div class="name truncate">Hãy trao cho anh (Official)
                            </div>
                            <div class="artist">Sơn Tùng M-TP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div>
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                          class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                          </path>
                        </svg>&nbsp;1M2</div>
                      <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                          </div>
                          <img src="./assets/images/im-crs-1.png">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <div class="name truncate">Hãy trao cho anh (Official)
                            </div>
                            <div class="artist">Sơn Tùng M-TP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div>
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                          class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                          </path>
                        </svg>&nbsp;1M2</div>
                      <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                              class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path
                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                              </path>
                            </svg>
                          </div>
                          <img src="./assets/images/im-crs-1.png">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <div class="name truncate">Hãy trao cho anh (Official)
                            </div>
                            <div class="artist">Sơn Tùng M-TP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div>
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                          class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                          </path>
                        </svg>&nbsp;1M2</div>
                      <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-3"></div>
            <div class="col-12 rm-lg-pr">
              <button type="button" class="btn btn-reverse btn-large btn-rounded">xem thêm</button>
            </div>
          </div>
        </section>
        <!-- Nghe tiep -->

      </div>
    </div>
  </div>
  </div>
  <!-- </div> -->
  <div class="p-5"></div>

  <!-- footer -->
  <div>
    <div class="footer">
      <div class="footer-bg">
        <img src="./assets/images/im-footer-01.png" alt="footer-background">
      </div>
      <div class="py-4 py-lg-5 py-md-4 d-flex align-items-center">
        <div class="im-wrapper container" style="z-index: 2;">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-1 pb-3">
                <div class="d-flex align-items-center justify-content-md-end">
                  <img src="./assets/images/imusic-logo.png" width="42px">
                </div>
              </div>
              <div class="col-md-3 my-sm-3 my-md-0">
                <div class="py-3">CÔNG TY CỔ PHẦN ABC MUSIC</div>
                <div class="sub-text">
                  <div>Địa chỉ:</div>
                  <div class="address">70 Nguyễn Phi Khanh, Phường Tân Định, Quận 1, Thành phố Hồ Chí Minh</div>
                </div>
              </div>
              <div class="col-md-5 my-sm-3 my-md-0">
                <div class="d-flex align-items-center">
                  <div class="py-3">CUSTOMER SERVICE</div>
                </div>
                <div class="sub-text">
                  <div>Phone: (098) 7459 893</div>
                  <div>Email: anhdt.des@gmail.com</div>
                </div>
              </div>
              <div class="col-md-3 my-sm-3 my-md-0">
                <div class="d-flex align-items-center">
                  <div class="py-3">KẾT NỐI VỚI CHÚNG TÔI:</div>
                </div>
                <div class="sub-text">
                  <div class="row">
                    <div class="col-3 col-md-9 col-lg-7 d-flex justify-content-between">
                      <a class="mr-2" href="#">
                        <img class="social" src="./assets/images/im-fb-icon.png">
                      </a>
                      <a class="mr-2" href="#">
                        <img class="social" src="./assets/images/im-ptr-icon.png">
                      </a>
                      <a href="#">
                        <img class="social" src="./assets/images/im-youtube-icon.png">
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex align-items-center footer-end">
        <div class="im-wrapper container">
          <div class="col-md-12  py-4 ">
            <div class="row">
              <div class="col-0 col-md-1"></div>
              <div class="col-12 col-md-3 footer-end__design pb-3">&copy; Design by Datian.s</div>
              <div class="col-12 col-md-5">
                <div class="sub-text pb-2 pb-md-0">Điều khoản sử dụng</div>
                <div class="sub-text">
                  <span class="terms">Bản quyền nội dung cung cấp bởi </span>ABC Music
                </div>
              </div>
              <div class="col-12 col-md-3 pt-5 pt-sm-5 pt-md-0">
                <img class="pr-2 pb-3 pb-lg-0" src="./assets/images/tb-bct.png" width="170px">
                <img class="pl-2" src="./assets/images/dmca.png" width="120px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</body>


<!-- Main script for the player -->
<script src="./assets/js/mv_player.js"></script>
<script>
  const showAllBtn = document.querySelector('#see-all-btn');
  const btnText = document.querySelector('#btn-text');
  const btnIcon = document.querySelector('#btn-icon');
  const lyrics = document.querySelector('#lyrics');

  showAllBtn.addEventListener('click', function () {
    lyrics.classList.toggle('show-all');
    showAllBtn.classList.toggle('on');
    const isCollapsed = showAllBtn.classList.value === 'on';
    if (isCollapsed) {
      btnText.innerHTML = 'Thu gọn';
      btnIcon.innerHTML = '' +
        '<svg true" focusable="false" data-prefix="fas" data-icon="chevron-up" class="svg-inline--fa fa-chevron-up fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path  d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>';
    } else {
      btnText.innerHTML = 'Xem toàn bộ';
      btnIcon.innerHTML = '' +
        '<svg true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>';
    }

  })
</script>

</html>