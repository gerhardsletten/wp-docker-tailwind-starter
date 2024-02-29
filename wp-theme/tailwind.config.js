import glob from "glob";

export default {
  mode: "jit",
  content: ["./assets/**/*.js"].concat(glob.sync("./**/*.php")),
  theme: {
    extend: {
      colors: {
        primary: "rgb(30 41 59)",
      },
      keyframes: {
        slideright: {
          "0%": { transform: "translateX(100%)" },
          "100%": { transform: "translateX(0%)" },
        },
      },
      animation: {
        "slide-right": "slideright 200ms ease-in-out",
      },
    },
  },
  variants: {},
  plugins: [],
};
