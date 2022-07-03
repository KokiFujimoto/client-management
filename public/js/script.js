// 登録メッセージ
function storeMessage() {
    window.alert('登録しました');
  }
  // 保存メッセージ
  function updateMessage() {
    window.alert('保存しました');
  }
  // 削除確認アラート
  function deleteConfirm() {
    if(!window.confirm('本当に削除しますか？')){
        window.alert('キャンセルされました'); 
        return false;
    }
    document.deleteform.submit();
  };