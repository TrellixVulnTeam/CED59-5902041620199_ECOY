from flask import Flask,render_template

app = Flask(__name__)

@app.route('/')
def register():
    return render_template('index.html')

@app.route('/',methods=["POST"])
def index():
    return 'xyz'

if __name__ == '__main__':
    app.run()