<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TASK 2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<header style="margin: 57px;background: var(--bs-blue);"></headervalue=tyle=>
            <form action="directionUpdate.php" method="get">

    <div style="text-align: center;padding-bottom: 0px;margin-top: 25%;">
        
                        <button class="btn btn-primary" type="submit" name="movement" id="movement" value="F" style="width: 173.5px;height: 68px;margin: 0px;text-align: center;background: var(--bs-gray);transform: perspective(0px);font-size: 22px;">Forward</button><br><br>
                    <button class="btn btn-primary" type="submit" name="movement" id="movement" value="L" style="width: 173.5px;height: 68px;margin: 0px;text-align: center;background: var(--bs-gray);transform: perspective(0px);font-size: 22px;color: var(--bs-light);">Left</button>
                        <button class="btn btn-primary" type="submit" name="movement" id="movement" value="S" style="width: 173.5px;height: 68px;margin: 0px;text-align: center;background: var(--bs-gray);transform: perspective(0px);font-size: 22px;">Stop</button>
        <button class="btn btn-primary" type="submit" name="movement" id="movement" value ="R" style="width: 173.5px;height: 68px;margin: 0px;text-align: center;background: var(--bs-gray);transform: perspective(0px);font-size: 21px;">Right</button><br><br>
                            <button class="btn btn-primary" type="submit" name="movement" id="movement" value= "B" style="width: 173.5px;height: 68px;margin: 0px;text-align: center;background: var(--bs-gray);transform: perspective(0px);font-size: 22px;">Backward</button>
            

    </div>  
          </form>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
  window.watsonAssistantChatOptions = {
      integrationID: "a58e65dc-9856-4cce-9878-d0a02e217177", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "72493d59-0b84-42ed-a819-db2539010eab", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>

</html>