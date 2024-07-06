# Modified app.py with Flask integration

from flask import Flask, render_template
from matchmaking import match_innovators_and_implementors



app = Flask(__name__)

implementor_file = 'implementor.json'
innovator_file = 'innovator.json'

# Match innovators and implementors
matches = match_innovators_and_implementors(implementor_file, innovator_file)

@app.route('/innovator')
def innovator():
    return render_template('innovator.html', matches=matches)

if __name__ == '__main__':
    app.run(debug=True)
