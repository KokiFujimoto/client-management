// 登録メッセージ
function storeMessage() {

    const btnSubmit = document.getElementById('btnSubmit');
    const inputName = document.getElementById('inputName');
    const inputKana = document.getElementById('inputKana');
    const inputTel = document.getElementById('inputTel');
    const inputInfo = document.getElementById('inputInfo');

    let message = [];
    /*入力値チェック*/
    if(inputName.value == ""){
        message.push("名前が未入力です");
    }
    if(inputKana.value == ""){
        message.push("フリガナが未入力です");
    }
    if(inputKana.value.match(/[^ァ-ヶー　]+$/)){
        message.push("カタカナで入力してください");
    }
    if(inputTel.value == ""){
        message.push("電話番号が不適切です");
    }
    if(inputInfo.value == ""){
        message.push("顧客情報が未入力です");
    }
    if (inputName.value.length > "255" || inputKana.value.length > "255" || inputInfo.value.length > "511"){
        message.push("文字数が制限を超えています");
    }

    if(message.length > 0) {
        window.alert(message);
        return;
    } else {
        window.alert('登録しました');
    }
  }

  // 保存メッセージ
  function updateMessage() {

    const btnSubmit = document.getElementById('btnSubmit');
    const inputName = document.getElementById('inputName');
    const inputKana = document.getElementById('inputKana');
    const inputTel = document.getElementById('inputTel');
    const inputInfo = document.getElementById('inputInfo');

    let message = [];
    /*入力値チェック*/
    if(inputName.value == ""){
        message.push("名前が未入力です");
    }
    if(inputKana.value == ""){
        message.push("フリガナが未入力です");
    }
    if(inputKana.value.match(/[^ァ-ヶー　]+$/)){
        message.push("カタカナで入力してください");
    }
    if(inputTel.value == ""){
        message.push("電話番号が不適切です");
    }
    if(inputInfo.value == ""){
        message.push("顧客情報が未入力です");
    }
    if (inputName.value.length > "255" || inputKana.value.length > "255" || inputInfo.value.length > "511"){
        message.push("文字数が制限を超えています");
    }

    if(message.length > 0) {
        window.alert(message);
        return false;
    }
    document.update.submit();
    window.alert('保存しました');
    
  }

  // 削除確認アラート
  function deleteConfirm() {
    if(!window.confirm('本当に削除しますか？')){
        window.alert('キャンセルされました'); 
        return false;
    }
    document.delete.submit();
  }