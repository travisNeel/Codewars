class FileNameExtractor {
    static extractFileName (str) {
        return str.substr(str.indexOf('_')+1,(str.lastIndexOf( '.')-str.indexOf('_')-1));;
    }
}