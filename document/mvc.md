#MVC là gì?

MVC là viết tắt của Model – View – Controller. Là một kiến trúc phần mềm hay mô hình thiết kế được sử dụng trong kỹ thuật phần mềm. Nói cho dễ hiểu, nó là mô hình phân bố source code thành 3 phần, mỗi thành phần có một nhiệm vụ riêng biệt và độc lập với các thành phần khác.

#Các thành phần trong MVC

##Controller
Giữ nhiệm vụ nhận điều hướng các yêu cầu từ người dùng và gọi đúng những phương thức xử lý chúng… Chẳng hạn thành phần này sẽ nhận request từ url và form để thao tác trực tiếp với Model.

##Model
Đây là thành phần chứa tất cả các nghiệp vụ logic, phương thức xử lý, truy xuất database, đối tượng mô tả dữ liệu như các Class, hàm xử lý…

##View
Đảm nhận việc hiển thị thông tin, tương tác với người dùng, nơi chứa tất cả các đối tượng GUI như textbox, images… Hiểu một cách đơn giản, nó là tập hợp các form hoặc các file HTML.

#Luồng đi trong MVC
Để giải thích, mình xin dùng 1 ví dụ đơn giản + hình minh họa sau.

Khi có một yêu cầu từ phía client gửi đến server, Bộ phận controller có nhiệm vụ nhận yêu cầu, xử lý yêu cầu đó. Và nếu cần, nó sẽ gọi đến phần model, vốn là bộ phần làm việc với Database..

Sau khi xử lý xong, toàn bộ kết quả được đẩy về phần View. Tại View, sẽ gen ra mã Html tạo nên giao diện, và trả toàn bộ html về trình duyệt để hiển thị.

#Ưu điểm và nhược điểm của MVC

##**1.  Ưu điểm**
Thể hiện tính chuyên nghiệp trong lập trình, phân tích thiết kế. Do được chia thành các thành phần độc lập nên giúp phát triển ứng dụng nhanh, đơn giản, dễ nâng cấp, bảo trì..

##**2.  Nhược điểm**
Đối với dự án nhỏ việc áp dụng mô hình MC gây cồng kềnh, tốn thời gian trong quá trình phát triển. Tốn thời gian trung chuyển dữ liệu của các thành phần.

#Tóm lại

Để lập trình chuyên nghiệp, làm việc trọng một nhóm nhiều người, việc áp dụng mô hình trong thiết kế là điều bắt buộc. MVC là một mô hình khá đơn giản và thích hợp cho những người chưa nhiều kinh nghiệm. Hy vọng qua bài giới thiệu này các bạn có những kiến thức cơ bản về mô hình thiết kế trong làm phần mềm.








**Markdown**

# Header
**Bold** and *italic* and ***both***.
__Bold__ and _talic_ and ___both___
~~strike me~~
Viết link trong markdown bằng cách cho alt text vào trong ngoặc vuông[] và link thật vào trong ngoặc đơn (). Ví dụ ở đây giống hệt ví dụ đầu tiên về John_Gruber ở đoạn trên.

[John_Gruber](https://en.wikipedia.org/wiki/John_Gruber)

Ngoài ra bạn có thể thêm tiêu đề cho link bằng cách thêm "title" trong mô tả bên trong ngoặc đơn ().

[John_Gruber](https://en.wikipedia.org/wiki/John_Gruber "Markdown Creator")

Chèn hình ảnh trong markdown chỉ khác với chèn link đôi chút. Bạn thêm ký tự ! vào đầu tiên, sau đó ghi alt text và link ảnh vào trong ngoặc vuông [] và ngoặc đơn ().

![Atom](https://atom.io/assets/packages-d16d6cc46fd0cf01842409577e782b74.gif)

Để định đạng một đoạn văn bản thành các gạch đầu dòng trong markdown, bạn dùng ký tự * và một dấu cách ở mỗi ý và dùng thêm 2 dấu cách ở đằng trước nếu muốn lùi vào một level.

* Ruby
* PHP
  * Laravel
  * Symfony
  * Phalcon
* Python
  * Flask
     * Jinja2
     * WSGI1.0 
  * Django 

Nếu bạn muốn dùng số để đánh dấu thì viết số và một dấu chấm .

Cách viết một trích dẫn giống hệt khi bạn vẫn trả lời bình luận hay dẫn chứng trong các diễn đàn: sử dụng ký tự >.

Có 2 loại code có thể viết trong markdown: inline code (code trong dòng) và code block (đoạn code riêng). Inline code dùng ký tự phẩy ngược

The `let` keyword.

... còn code block dùng 3 ký tự phẩy ngược kẹp ở đầu và đuôi của 1 đoạn. Khi bạn muốn cú pháp hiển thị chính xác với ngôn ngữ của đoạn code thì có thể thêm định danh ngôn ngữ ở 3 ký tự phẩy ngược mở đoạn như dưới đây.

```python
import os
os.system('clear')
```

Ngoài ra nếu cách đầu dòng 4 dấu cách cho 1 đoạn thì đoạn đó cũng sẽ được tự động nhận là một code block.

    import os
    os.system('clear')

Vẽ bảng trong Markdown sẽ hơi khó nếu bạn chưa quen. Các cột được tách nhau bằng dấu ngăn thẳng đứng | và header được tách với content bằng dấu gạch ngang -.

| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

Ở dòng ngăn cách giữa header và content bạn sẽ thấy ký hiệu căn lề trái phải (cột 2 và cột 3) bằng dấu :. Bảng trên sẽ được render thành cấu trúc HTML như dưới đây.

Sẽ có những lúc bạn cần dùng đến đúng những ký tự mà Markdown đang sử dụng, ví dụ đơn giản như khi muốn viết *bold* mà không bị in đậm. Khi đó hãy sử dụng ký tự escape \