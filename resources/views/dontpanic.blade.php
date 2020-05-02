<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>playground</title>
    <link rel="stylesheet" href="scss/styles.scss" />
    <script src="js/main.js"></script>
</head>

<body>
    <!-- ###################################################################### -->
    <!-- ###################################################################### -->
    <!-- ###################################################################### -->
    <section class="pageContent">
        <div class="grid">
            <div class="grid__container">
                <div class="grid__container--content">
                    <!-- blargh -->
                    <div>
                        <div class="grid__styling">something went wrong</div>
                    </div>
                    <div>
                        <div class="grid__styling">lorem300</div>
                    </div>
                    <button class="ripple">Button</button>
                </div>
            </div>
        </div>
    </section>
    <!-- ###################################################################### -->
    <!-- ###################################################################### -->
    <!-- ###################################################################### -->
    <div class="container__dontpanic">
        <div class="square black">
            <div class="square">
                <div class="square black">
                    <div class="square">
                        <div class="square black">
                            <div class="square">
                                <div class="square black">
                                    <div class="square">
                                        <div class="square black">
                                            <div class="square">
                                                <div class="square black">
                                                    <div class="square">
                                                        <div class="square black">
                                                            <div class="square">
                                                                <div class="square black">
                                                                    <div class="square">
                                                                        <div class="square black">
                                                                            <div class="square">
                                                                                <div class="square black">
                                                                                    <div class="square">
                                                                                        <div class="square black">
                                                                                            <div class="square">
                                                                                                <div class="square black">
                                                                                                    <div class="square">
                                                                                                        <div class="square black">
                                                                                                            <div class="square">
                                                                                                                <div class="square black">
                                                                                                                    <div class="square">
                                                                                                                        <div class="square black">

                                                                                                                            STAY CALM

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: var(--dark);
            margin: 0;
            position: relative;
            /* line below = perfect darkmode
            filter: invert(1) hue-rotate(180deg); */
        }

        :root {
            --white: whitesmoke;
            --lightly: mintcream;
            --light: azure;
            --dark: #031927;
            --darkly: #052e47;
        }

        div::selection {
            background: var(--darkly);
            color: var(--light);
        }

        .container__dontpanic {
            z-index: -10;
            height: 300px;
            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -150px 0 0 -150px;
        }

        .square {
            height: 94%;
            width: 94%;
            background: var(--light);
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -47% 0 0 -47%;
        }

        .black {
            display: flex;
            background: var(--darkly);
            animation: rotate 120s infinite linear;
            align-items: center;
            text-align: center;
            color: var(--light);
            box-shadow: 0 0 8px var(--darkly);
            /* box-shadow: 0 0 8px var(--darkly), 0 0 8px var(--darkly); */
        }

        .grid__container--content {
            padding: 2px;
            margin: 4px;
            /* border-radius: 12px; */
        }

        .grid {
            padding: 4px;
            display: grid;
            grid-auto-rows: auto;
            align-self: center;
            align-items: center;
            align-content: center;
        }

        .grid__styling {
            padding: 12px;
            margin: 8px;
            background: linear-gradient(to right, transparent, var(--light) 10%, var(--light) 90%, transparent);
            color: var(--dark);
            text-align: center;
            font-size: 2em;
            border-radius: 12px;
            /* opacity: 0.9; */
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /*
        ----
        maybe usefull later / snippets
        ---
        
        ###pseudo selector### 
        (everything EXCEPT header (example))

        body :not(header) {
            color: red;
            border: 40px solid blue;
        }

        .header {
            ###for color gradient text###
            font-size: 2rem;
            background: linear-gradient(to right, lightgreen, greenyellow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transperent;
            display: inline;
        }

        -------
        */

        /* ###RIPPLE BUTTON### */

        .ripple {
            background-position: center;
            transition: background 0.8s;
        }

        .ripple:hover {
            background: brown radial-gradient(circle, transparent 1%, orangered 1%) center/15000%;
        }

        .ripple:active {
            background-color: var(--lightly);
            background-size: 100%;
            transition: background 0s;
        }

        /* Button style */
        button {
            border: none;
            border-radius: 16px;
            padding: 12px 18px;
            font-size: 16px;
            color: var(--dark);
            background-color: var(--light);
            box-shadow: 0 0 20px #999;
            outline: none;
        }
    </style>
</body>

</html>