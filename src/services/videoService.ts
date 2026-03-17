import { GoogleGenAI } from "@google/genai";

export const generateHeroVideo = async () => {
  const ai = new GoogleGenAI({ apiKey: process.env.GEMINI_API_KEY });
  
  const prompt = "Cinematic, high-definition video of a modern Miami luxury home and a professional commercial office building. The video shows professional security cameras installed on the exterior. A person is seen looking at a tablet showing a clear, high-tech security interface with live camera feeds, giving a sense of control and safety. The footage transitions between residential and commercial security, emphasizing professional installation and peace of mind.";

  try {
    let operation = await ai.models.generateVideos({
      model: 'veo-3.1-fast-generate-preview',
      prompt: prompt,
      config: {
        numberOfVideos: 1,
        resolution: '1080p',
        aspectRatio: '16:9'
      }
    });

    // Poll for completion
    while (!operation.done) {
      await new Promise(resolve => setTimeout(resolve, 10000));
      operation = await ai.operations.getVideosOperation({ operation: operation });
    }

    const downloadLink = operation.response?.generatedVideos?.[0]?.video?.uri;
    return downloadLink;
  } catch (error) {
    console.error("Error generating video:", error);
    return null;
  }
};
