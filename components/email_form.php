<form id="email-form">
    <input placeholder="Ваш e–mail" />
    <button type="submit"> 
        <?php echo isset($buttonLabel) ? htmlspecialchars($buttonLabel) : "Submit"; ?>
    </button>
</form>