

function generatePDF()
    {
        
        html2pdf()
        .from(document.getElementById("res"))
        .save();
    }