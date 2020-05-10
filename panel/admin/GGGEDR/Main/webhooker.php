<!DOCTYPE html>
<!-- To the extent possible under law, Jan Hasebos has waived all copyright and related or neighboring rights to this file. -->
<html>
<body>
<h1>Discord Webhook Sender</h1>
<!-- First, this is a version of the form that doesn't use JS.
     It's the most simplistic, but has a hardcoded URL, and puts the user on an empty page (or an unfriendly json dump if wait=true) after it sends.
     It also doesn't allow for embeds. -->

<!-- Now the real meat and potatoes, a form enhanced with the latest (as of 2008) active scripting technology! -->
<form id="sendform">
    <!-- Had to make the ids different to not conflict with the above form, but feel free to use more intuitive names in your own projects. -->
    <label for="msgtext">Webhook URL: </label><input type="text" id="url"/><br/>
    <label for="msgtext">Message content: </label><input type="text" pattern=".{0,2000}" id="msgtext"/><br/>
    <label for="name">Username: </label><input type="text" id="name"/><br/>
    <label for="avatar">Avatar URL: </label><input type="text" id="avatar"/><br/>
    <label for="speech">Text-to-speech: </label><input type="checkbox" id="speech"/><br/>

    <div id="embeds"></div>
    <input type="button" id="addembed" value="Add Embed"/><br/>

    <input type="submit"/><br/>
    <span id="result"> </span>
</form>
<!-- We place this at the bottom so the DOM is ready when our script gets executed. -->
<script>
    document.getElementById('sendform').addEventListener('submit', function(e) {
        e.preventDefault(); // don't actually submit the form, as there's no "action" to submit to

        var message = { // construct the object to send to discord
            content: document.getElementById('msgtext').value,
            username: document.getElementById('name').value,
            avatar_url: document.getElementById('avatar').value,
            tts: document.getElementById('speech').checked,
            embeds: []
        };
        var embeds = document.getElementById('embeds').childNodes;
        for (var i = 0; i < embeds.length; ++i)
            message.embeds.push(divToEmbed(embeds[i]));

        var req = new XMLHttpRequest();
        req.addEventListener('load', handleLoad);
        req.open('post', document.getElementById('url').value, true); // (method, url, async)
        req.setRequestHeader('Content-Type', 'application/json');
        req.send(JSON.stringify(message));
    });

    function handleLoad() {
        document.getElementById('result').childNodes[0].textContent = 'Message sent at ' + Date().toString() + ' with response code ' + this.status;
    }

    // == embed handling ==

    var embedDiv = (function() {
        var div = document.createElement('div'),
            input;

        // timestamp doesn't have an user friendly UI in some browsers, make sure you enter an ISO date like 2019-04-30T21:05:07.510Z
        var mainfields = {'title': 'text', 'description': 'text', 'url': 'text', 'timestamp': 'datetime-local', 'color': 'color'};
        for (var field in mainfields) {
            input = document.createElement('input');
            input.type = mainfields[field];
            input.placeholder = field;
            div.appendChild(input);
        }

        /* We could support every embed option, but that's way beyond the scope of this document.
           https://discordapp.com/developers/docs/resources/channel#embed-object */

        return div;
    })();

    document.getElementById('addembed').addEventListener('click', function() {
        document.getElementById('embeds').appendChild(embedDiv.cloneNode(true)); // true makes it a deep clone so it includes its children
    });

    function divToEmbed(div) {
        return {
            'title': div.childNodes[0].value,
            'description': div.childNodes[1].value,
            'url': div.childNodes[2].value,
            'timestamp': div.childNodes[3].value,
            'color': parseInt(div.childNodes[4].value.substring(1), 16) // discord expects numbers as an int, while the color input outputs it in hex prefixed with a #
        };
    }
</script>
</body>
</html>