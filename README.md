<div class="pic" align="center">
  <a href="https://charmve.github.io/xss-test/examples/showcase/">
    <img src="examples/showcase/web/headpic.png" alt="Steganography.js"> 
  </a>
</div>

# steganography.js
steganography.js is a JavaScript library used to encode secret messages inside images and to decode them again.

## How does it work
Behind the scenes steganography.js uses an algorithm to convert the given message into appropriate binary data which then will be hidden in the alpha channel of the given cover image. A HTML5 canvas element is then used to process the data and the image.
To decode a message from a given image, a similiar algorithm is applied on the imagedata.

## How to use it
The use of the library is very simple. You just have to add the .js-file to your website and by now you can make use of the global object **steganography** or short **steg** and the two provided functions **encode** and **decode**.
* **encode** takes a *message* as String and a *image* as Image, HTMLImageElement or String representing the data-URL of the cover image. Returns the data-URL of the image with the encoded message inside.
* **decode** takes a *image* as Image, HTMLImageElement or String representing the data-URL of the image and returns the message which was found in the image.
	
## Contact me
If you have any questions, contact me.<br/>
My website [https://charmve.github.io](https://charmve.github.io)<br/>
My GitHub account [@Charmve](https://github.com/Charmve)

<!--
<img src="https://user-images.githubusercontent.com/29084184/126742207-0ddd7ae0-7164-4e94-aa9e-1c2c305d15de.gif">

![gifjs](https://user-images.githubusercontent.com/29084184/126742207-0ddd7ae0-7164-4e94-aa9e-1c2c305d15de.gif)


![image](https://user-images.githubusercontent.com/29084184/126742644-897edece-469c-42a2-9ff8-3d1db20b8f0b.png)


<html><body>
<img src="https://user-images.githubusercontent.com/29084184/126742207-0ddd7ae0-7164-4e94-aa9e-1c2c305d15de.gif">
<script src="https://user-images.githubusercontent.com/29084184/126742207-0ddd7ae0-7164-4e94-aa9e-1c2c305d15de.gif"></script>
</body></html>

-->
