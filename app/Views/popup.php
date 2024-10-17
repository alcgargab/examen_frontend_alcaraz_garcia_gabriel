<script>
    let timerInterval;
    Swal.fire({
        icon: "<?=(!empty($alertIcon))?$alertIcon:""?>",
        title: "<?=(!empty($alertTitle))?$alertTitle:""?>",
        html: "<?=(!empty($alertText))?$alertText:""?>",
        timer: 5000,
        timerProgressBar: false,
        didOpen: () => {
            Swal.showLoading();
            const timer = Swal.getPopup().querySelector("b");
            timerInterval = setInterval(() => {
                timer.textContent = `${Swal.getTimerLeft()}`;
            }, 100);
        },
        willClose: () => {
            clearInterval(timerInterval);
        }
    }).then((result) => {
        window.location.replace(localStorage.getItem("apiRest-ruta"));
    });
</script>