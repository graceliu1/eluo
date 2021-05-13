import os 
os.system("brew install tesseract")
os.system("pipenv shell")
os.system("pipenv install pytesseract Pillow")
try:
    from PIL import Image
except ImportError:
    import Image
import pytesseract
import os

def ocr_core(filename):
    """
    This function will handle the core OCR processing of images.
    """
    pytesseract.pytesseract.tesseract_cmd = r'/usr/local/Cellar/tesseract/4.1.1/bin/tesseract'
    text = pytesseract.image_to_string(Image.open(filename))  # We'll use Pillow's Image class to open the image and pytesseract to detect the string in the image
    file = open("ingredients.txt","w")
    file.write(text)
    file.close()
    os.system('javac Finder.java')
    os.system('java Finder') 
    file = open("ingredients-bad.txt", "r")
    lines = file.readlines()
    if (len(lines) == 0):
        return "This product looks safe! We didn't detect any harmful chemicals."
    ingredients = "This product contains harmful chemicals! "
    i = 0
    for line in lines:
        ingredients += str(i) + " - " + line
        i += 1
    return ingredients

#print(ocr_core('images/test.png'))