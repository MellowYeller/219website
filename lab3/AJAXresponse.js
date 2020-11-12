function showStateChange() {
    document.getElementById("button").hidden = true;
    document.getElementById("clear").hidden = false;
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        let message = "<p>";
        switch (this.readyState) {
            case 0:
                message += "0: request not initialized";
                break;
            case 1:
                message += "1: server connection established";
                break;
            case 2:
                message += "2: request received";
                break;
            case 3:
                message += "3: processing request";
                break;
            case 4:
                message += "4: request finished and response is ready";
                if (this.status == 200) {
                    message += `<p>${this.responseText}</p>`;
                }
                break;
        }
        message += "</p>";
        document.getElementById("ajax").innerHTML += message;
    };
    xhttp.open("GET", "quote.txt", true);
    xhttp.send();
}
function clearResponse() {
    console.log("clear called");
    document.getElementById("button").hidden = false;
    document.getElementById("clear").hidden = true;
    document.getElementById("ajax").innerHTML = "";
}