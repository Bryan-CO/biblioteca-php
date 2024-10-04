import { InputTextarea } from "primereact/inputtextarea";
import "../assets/textarea.css";

interface TextareaProps {
  data: string;
  title: string;
}

export const Textarea = ({ data, title }: TextareaProps) => {
  return (
    <>
      <label htmlFor={title}>{title}</label>
      <InputTextarea
        id={title}
        value={data}
        disabled
        rows={5}
        cols={30}
        className="form-textarea"
      />
    </>
  );
};
