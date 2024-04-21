function toggleChat() {
    var chatPopup = document.getElementById("chatPopup");
    var chatIcon = document.querySelector(".chat-icon");
    if (chatPopup.style.display === "block") {
      chatPopup.style.display = "none";
      chatIcon.style.display = "flex"; // 顯示小圖標
    } else {
      chatPopup.style.display = "block";
      chatIcon.style.display = "none"; // 隱藏小圖標
      hideContactsList(); // 隱藏聯絡人列表
    }
  }
  
  function toggleContactsList() {
    var contactsList = document.getElementById("contactsList");
    if (contactsList.style.display === "block") {
      contactsList.style.display = "none";
    } else {
      contactsList.style.display = "block";
    }
  }
  
  function hideContactsList() {
    var contactsList = document.getElementById("contactsList");
    contactsList.style.display = "none";
  }
  
  function openChat(accountId, accountName) {
    var chatPopup = document.getElementById("chatPopup");
    var chatIcon = document.querySelector(".chat-icon");
    chatPopup.style.display = "block";
    chatIcon.style.display = "none"; // 隱藏小圖標
    hideContactsList(); // 隱藏聯絡人列表
    
    var chatUserName = document.getElementById("chatUserName");
    chatUserName.innerText = accountName;
    chatUserName.setAttribute("data-receiver-id", accountId);
    chatUserName.setAttribute("data-receiver-name", accountName);
    
    loadChatMessages(accountId);
  }
  
  
  function handleImageButtonClick() {
    // 點擊照片按鈕後執行的操作
  }
  
  function hideChatPopup() {
    var chatPopup = document.getElementById("chatPopup");
    var chatIcon = document.querySelector(".chat-icon");
    chatPopup.style.display = "none";
    chatIcon.style.display = "flex";
    
    var contactsList = document.getElementById("contactsList");
    contactsList.style.display = "block";
  }