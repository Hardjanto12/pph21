// dvs
function dvsFunction() {
    popname = window.open(
        "/dvs/selectdvs",
        "Select Divisi",
        "status=1, height=600, width=600, toolbar=0,resizable=1"
    );
    popname.window.focus();
}
function popupCallbackdvs(dvsdata) {
    document.getElementById("inputdvs").setAttribute('value',dvsdata);
}


// jbt
function jbtFunction() {
    popname = window.open(
        "/jbt/selectjbt",
        "Select Jabatan",
        "status=1, height=600, width=600, toolbar=0,resizable=1"
    );
    popname.window.focus();
}
function popupCallbackjbt(jbtdata) {
    document.getElementById("inputjbt").setAttribute('value',jbtdata);
}

// asr
function asrFunction() {
    popname = window.open(
        "/asr/selectasr",
        "Select Asuransi",
        "status=1, height=600, width=600, toolbar=0,resizable=1"
    );
    popname.window.focus();
}
function popupCallbackasr(asrdata) {
    document.getElementById("inputasr").setAttribute('value',asrdata);
}

